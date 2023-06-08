@extends('merger.main')

@section('file')
    <div class="row justify-content-center">
        <div class="col-auto">
            <table>

            @foreach($data as $data)
            <tr>
                <td><i class="fa-solid fa-file-pdf my-2 mx-1" style="color: #f33939;"></i></td>
                <td>{{$data->Dokumen}}</td>
                <td><a href="{{url('/merger-view',$data->id)}}" class="mx-2">View</a></td>
            </tr>
            
            @endforeach
            </table>
        </div>
    </div>    

@endsection