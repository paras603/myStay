<a href="{{route('merchants.show', $r->id)}}" class="btn btn-primary">
    <i class="fas fa-eye"></i>
</a>
{{-- <a href="{{route('merchants.edit', $r->id)}}" class="btn btn-primary">
    <i class="fas fa-pencil-alt"></i>
</a> --}}
<button class="btn btn-primary" onclick="confirmDelete(() => {deleteMerchant({{$r->id}})})" >
    <i class="fas fa-trash"></i>
</button>
