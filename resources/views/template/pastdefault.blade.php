<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.css"
        <title>Document</title>
    </head>
    <body>
        <div class="v229_9735">
            <div class="v229_9736">
                <div class="v229_9737"></div>
                <div class="v229_9738"></div>
            </div>
            <div class="v229_9739"></div>
                <div class="v229_9741">
                    <div class="v229_9742">
                        <div class="v229_9743">
                            <form action="{{route('uploadedfile.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="file" id="file-input" name="Dokumen"/>
                                <input type="submit">
                            </form>
                        </div>
                        <div class="name"></div>
                    </div>
                </div>
                <div class="v229_9745">
                    @yield('file')
                </div>
                <span class="v229_9746">Dokumen diunggah </span>

                <span class="v229_9768">Format file yang didukung hanyalah PDF</span>

                <div class="v229_9769">
                    @include('template.sidebar')
                </div>
                <div class="v229_9786"></div>

                <div class="name"></div>
        </div>
    </body>
</html>