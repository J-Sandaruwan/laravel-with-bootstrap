<?php

namespace App\Http\Livewire\Pages\Users;

use App\Models\Users\TempUser;
use domain\Facades\Users\TempUserFacade;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;


class UserDataTable extends DataTableComponent
{

    protected $listeners = ['deleteData'];

    public function columns(): array
    {
        return [
            Column::make('First Name', 'first_name')
                ->sortable()
                ->searchable(),
            Column::make('Last Name', 'last_name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('Actions', 'id')->format(function ($id) {
                return view('pages.users.components.actions', ['id' => $id]);
            }),
        ];
    }

    public function query(): Builder
    {
        return TempUser::query()->where('user_id', Auth::id());
    }
    /**
     * deleteData
     *
     * @param  string $id
     * @return void
     */
    public function deleteData(string $id)
    {
        if (TempUserFacade::getByMd5Id($id)) {
            TempUserFacade::delete(TempUserFacade::getByMd5Id($id));

            $this->dispatchBrowserEvent('live-alert', [
                "type" => "success",
                "msg" => 'User deleted successfully !'
            ]);
        }
    }
}
