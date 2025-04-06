@extends('layout.main')

@section('content')
    <hr>
    <div>
        <form action="{{ route('worker.update', $worker->id) }}" method="Post">
            @csrf
            @method('Patch')
            <div style="margin-top: 15px"><input type="text" name="name" placeholder="Name"
                                                 value="{{ old('name') ?? $worker->name}}">
                @error('name')
                <div>
                    {{$message}}
                </div>
                @enderror</div>
            <div style="margin-top: 15px"><input type="text" name="surname" placeholder="Surname"
                                                 value="{{$worker->surname}}">
                @error('surname')
                <div>
                    {{$message}}
                </div>
                @enderror</div>
            <div style="margin-top: 15px"><input type="email" name="email" placeholder="Email"
                                                 value="{{ old('surname') ?? $worker->email}}">
                @error('email')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-top: 15px"><input type="number" name="age" placeholder="Age"
                                                 value="{{ old('age') ?? $worker->age}}">
                @error('age')
                <div>
                    {{$message}}
                </div>
                @enderror</div>
            <div style="margin-top: 15px"><textarea name="description"
                                                    placeholder="Description">{{ old('description') ?? $worker->description}}</textarea>
                @error('description')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-top: 15px">
                <input type="checkbox" name="is_married" form="isMarried"
                    {{$worker->is_married ? 'checked' : ''}}
                >
                <label for="isMarried">Is married</label>
                @error('is_married')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-top: 15px">
                <input type="submit" value="Изменить">
            </div>
        </form>
    </div>

@endsection
