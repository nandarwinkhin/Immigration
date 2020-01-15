@extends('layout.master')
@section('title','Detail')
@section('content')

    @if(session('status'))
        <div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">
            <div class="form-row">
                <h4>{{session('distName')}}({{session('typeName')}}){{session('num')}}
                </h4>
            </div>
            @endif


            @if(Session::has('pdfs'))

                @foreach (Session::get('pdfs') as $pdf)

                    @if( $pdf->pdf_type ==1)
                        <span>For 10 years </span><br>
                    @endif
                    @if( $pdf->pdf_type ==2)
                        <span>For 18 years old</span><br>
                    @endif
                    @if( $pdf->pdf_type ==3)
                        <span>For 30 years old</span><br>
                    @endif
                    @if( $pdf->pdf_type ==4)
                        <span>For 45 years old</span><br>
                    @endif


                    @php($pdffile=$pdf->file_name)


                    @php($filelocations=unserialize($pdffile))

                    @foreach($filelocations as $location)
                        @php($loc='http://localhost/Immigration/public/uploades/'.$location)
                        <div class="">
                            <iframe src="{{$loc}}" type="application/pdf" width="100%" height="500px">
                            </iframe>
                        </div>
                    @endforeach

                @endforeach
        </div>
    @endif


@endsection()