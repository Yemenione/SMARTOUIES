<?php

namespace App\Filament\Pages;

use App\Models\GlobalSetting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Actions\Action;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.manage-settings';

    protected static ?string $title = 'Global Settings';

    protected static ?string $navigationLabel = 'Settings';

    protected static ?string $slug = 'settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = GlobalSetting::first();
        if ($settings) {
            $this->form->fill($settings->toArray());
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Branding')
                    ->schema([
                        TextInput::make('site_name')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('site_logo')
                            ->image()
                            ->directory('settings')
                            ->visibility('public'),
                        FileUpload::make('site_icon')
                            ->image()
                            ->directory('settings')
                            ->visibility('public'),
                    ])->columns(2),

                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->tel()
                            ->maxLength(255),
                        Textarea::make('address')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Social Media')
                    ->schema([
                        TextInput::make('facebook_url')->url(),
                        TextInput::make('twitter_url')->url(),
                        TextInput::make('instagram_url')->url(),
                        TextInput::make('linkedin_url')->url(),
                    ])->columns(2),

                Section::make('Footer')
                    ->schema([
                        Textarea::make('footer_text')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save changes')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            $settings = GlobalSetting::first();
            if ($settings) {
                $settings->update($data);
            } else {
                GlobalSetting::create($data);
            }

            \Illuminate\Support\Facades\Cache::forget('global_settings');

            Notification::make()
                ->success()
                ->title('Settings saved successfully')
                ->send();
        } catch (\Exception $exception) {
            Notification::make()
                ->danger()
                ->title('Error saving settings')
                ->body($exception->getMessage())
                ->send();
        }
    }
}
