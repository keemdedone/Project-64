@extends('layouts.main')

@section('title',$title)

@section('content')

<form action="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" method="get">
    <label>
        <h3 class="text-center"> Search : <input type="text" name="term" value="{{ $term }}" size="40"></h3>
    </label>
           <b class="text-center" >{{ $mangas->withQueryString()->links() }}<b>
           <b class="" ><a href ="{{ route('recommand-add-manga-form',['recommand' => $recommand->id]) }}"  class="submit2" >Add manga </a></b>
</form><br /><br />

    <main>
        <table align="center" border="1" class="tablec2">
            <thead>
                <tr class="tableco" align="center">
                    <th style="background-color: rgba(0, 0, 0, 0.226); ">ID   </th>
                    <th style="background-color: rgba(0, 0, 0, 0.226); ">Name </th>
                    <th style="background-color: rgba(0, 0, 0, 0.226); ">     </th>
                </tr>
            </thead>
                  <tbody>
                        @foreach($mangas as $manga)
                    <tr>
                           <td>
                              <b>
                                <a href="{{ route('manga-view', ['manga' => $manga -> id]) }}" style="color: white; text-decoration: none;"> {{ $manga->id }} </a>
                              </b>
                          </td>
                          <td>{{ $manga->name }}</td>
                          <td>
                              <a type="submit" href="{{ route('recommand-remove-manga',['recommand' =>$recommand -> id,'manga' => $manga -> id,]) }}" style="color: white;">Remove</a>
                          </td>
                    </tr>

                        @endforeach
                 </tbody>
         </table>
    </main>
    
@endsection