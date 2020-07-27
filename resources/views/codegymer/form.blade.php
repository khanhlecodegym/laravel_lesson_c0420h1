<div class="form-group row">
    <label for="staticName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="staticName" value="{{ $codegymer->name ?? '' }}">
      </div>
    @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="Email" value="{{ $codegymer->email ?? ''}}">
    </div>
    @error('email')
    <p class="text-danger">{{ $message }}</p>
@enderror
  </div>

  <div class="form-group">
    <label for="groupName">Tên Lớp: </label>
    <select class="form-control" id="groupName" name="codegymergroup_id">
      @foreach ($groups as $group)
      <option value="{{ $group->id }}">{{ $group->name }}</option>
      @endforeach


    </select>
  </div>
    @csrf
