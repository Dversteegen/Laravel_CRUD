<x-base>

    <x-slot name="content">
        <h1>Welcome to the Edit Page</h1>

        <div>
            @if ($errors->any())
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            @endif
        </div>

        <div id="form_container">

            <div id="form_container_top">
                <h2>Update</h2>
            </div>

            <form id="pokemon_form" method="post" action="{{ route('update', ['pokemon' => $pokemon]) }}">
                @csrf
                @method('put')
                <input type="text" class="textbox" name="name" placeholder="Name" value="{{$pokemon->name}}" />
                <input type="text" class="textbox" name="typeOne" placeholder="First Type" value="{{$pokemon->typeOne}}" />
                <input type="text" class="textbox" name="typeTwo" placeholder="Second Type" value="{{$pokemon->typeTwo}}" />
                <textarea class="textbox" name="description" placeholder="Description">{{$pokemon->description}}</textarea>                
                <input type="text" class="textbox" name="region" placeholder="Region" value="{{$pokemon->region}}" />
                <input type="submit" class="button" value="Update" />

            </form>

        </div>
    </x-slot>

</x-base>
