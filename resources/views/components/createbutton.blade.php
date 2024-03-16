@if (isset($create_link))
<li class="creat-btn">
    <div class="nav-link">
        <a class=" btn btn-sm btn-soft-primary" href="{{ $create_link }}" role="button"><i
                class="fas fa-plus me-2"></i>New Task</a>
    </div>
</li>
@endif