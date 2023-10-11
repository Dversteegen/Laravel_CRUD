<x-base>

    <x-slot name="content">
        <h1>Welcome to the Create Page</h1>

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
                <h2>Create</h2>
            </div>

            <form id="pokemon_form" method="post" action="{{ route('save') }}">
                @csrf
                @method('post')
                <input type="text" class="textbox" name="name" placeholder="Name" />
                <input type="text" class="textbox" name="typeOne" placeholder="First Type" />
                <input type="text" class="textbox" name="typeTwo" placeholder="Second Type" />
                <textarea class="textbox" name="description" placeholder="Description"></textarea>                
                <input type="text" class="textbox" name="region" placeholder="Region" />
                <input type="submit" class="button" value="Create" />

            </form>

        </div>
    </x-slot>

</x-base>
