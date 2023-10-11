<x-base>    

    <x-slot name="content">
        <h1>Welcome to the Home Page</h1>

        <table id="table_pokemon">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type One</th>
                    <th>Type Two</th>
                    <th>Description</th>
                    <th>Region</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemon as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->typeOne }}</td>
                        <td>{{ $p->typeTwo }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->region }}</td>
                        <td id="td_edit" class="td_class">
                            <a href="{{ route('edit', ['pokemon' => $p]) }}" >Edit</a>
                        </td>
                        <td class="td_class">
                            <form method="post" action="{{route('delete', ['pokemon' => $p])}}">
                                @csrf
                                @method('delete')
                            <input type="submit" class="button" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </x-slot>

</x-base>
