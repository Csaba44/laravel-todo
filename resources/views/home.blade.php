@extends("layouts.default")

@section("maincontent")
<form action="{{ route('formsubmitted') }}" method="post"  class="pt-5">
  @csrf
  <label for="todoTitle">Todo title: </label>
  <input class="border" type="text" name="todoTitle" id="todoTitle" placeholder="Do the dishes..." required>
  <br>
  <button type="submit" class="cursor-pointer bg-slate-400 hover:bg-slate-600 px-4 py-2 rounded-full">Submit</button>
</form>
@endsection
