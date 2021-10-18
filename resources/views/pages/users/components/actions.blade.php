<div class="dropend no-arrow mb-1">
    <a class="btn btn-sm btn-icon-only text-dark  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
        <a class="dropdown-item" href="{{ route('users.edit',md5($id)) }}" class="btn btn-warning" title="">
            <i class="fa fa-edit"></i>&nbsp;Edit
        </a>
        <a class="dropdown-item"
            onclick="delconfLivewire('{{ md5($id) }}','Do You Want To Remove This User?','Yes , Delete It','User Deleted Successfully') "
            href="javascript:void(0);" class="btn btn-warning" title="">
            <i class="fa fa-trash"></i>&nbsp;Delete
        </a>
    </div>
</div>

