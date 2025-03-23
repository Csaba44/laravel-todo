@extends("layouts.default")

@section("maincontent")
  <form action="{{ route('formsubmitted') }}" method="post" class="pt-5">
    @csrf
    <label for="todoTitle">Todo title: </label>
    <input class="border" type="text" name="todoTitle" id="todoTitle" placeholder="Do the dishes..." required>
    <br>
    <button type="submit" class="cursor-pointer bg-slate-400 hover:bg-slate-600 px-4 py-2 rounded-full">Submit</button>
  </form>

  @if(session('success'))
      <p class="text-green-600">{{ session('success') }}</p>
  @endif
  @if(session('deleted'))
      <p class="text-red-600">{{ session('deleted') }}</p>
  @endif
  @if(session('updated'))
      <p class="text-amber-600">{{ session('updated') }}</p>
  @endif

  <div class="p-5 max-w-fit">
    <ul class="mt-4 space-y-2">
      @foreach ($todos as $todo)
        <li class="border px-4 py-2 rounded flex gap-5">
          <p>{{ $todo->title }}</p>
          <form action="{{ route('deleteTodo') }}" method="post">
            @csrf
            @method("DELETE")
            <input type="hidden" name="deleteId" id="deleteId" value="{{ $todo->id }}">
            <button type="submit" class="text-red-600 cursor-pointer">Delete</button>
          </form>
          <form action="{{ route('toggleTodo', ['deleteId' => $todo->id]) }}" method="post">
            @csrf
            @method("PUT")
            <button type="submit" class="font-bold cursor-pointer {{ $todo->isCompleted ? 'text-green-600' : 'text-amber-600' }}">{{ $todo->isCompleted ? "Completed" : "Not completed" }}</button>
          </form>
        </li>
        
      @endforeach
    </ul>
  </div>
@endsection