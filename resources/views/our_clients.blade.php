@extends('layouts.app')
@section('content')



<?php $directory = "storage/ourClients"?>
<?php $dir = new DirectoryIterator($directory)?>

<?php $count=0 ?>
@foreach ($dir as $fileinfo)
@if  ($fileinfo->isDir() && !$fileinfo->isDot())
<?php $fileName = $fileinfo->getFilename()?>
    <?php $images = glob("storage/ourClients/".$fileName . "/*.jpg") ?>
    <div class="card border-dark mb-3">
        <h1 class="display-4 card-header font-weight-normal text-center">{{$fileName}}<h1>
        <div class="card-body text-center">


        <div id="carouselExampleIndicators{{$count}}" class="carousel slide" data-ride="carousel" >
            <?php $i=0 ?>
            @if (count($images)>1)
                
            <ol class="carousel-indicators">
                @foreach($images as $image)
                @if ($i==0)
                    
                <li data-target="#carouselExampleIndicators{{$count}}" data-slide-to="{{$i}}" class="active"></li>
                @else
                    
                <li data-target="#carouselExampleIndicators{{$count}}" data-slide-to="{{$i}}"></li>
                
                @endif
                <?php $i++ ?>

                @endforeach
            </ol>
            @endif
            <?php $i=0 ?>
            <div class="carousel-inner">
                @foreach($images as $image)
                <?php reset($images); ?>
                @if ($i==0)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$image}}" alt="{{$i}}">
                </div>
                @else     
                
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$image}}" alt="{{$i}}">
                </div>
                @endif
                <?php $i++;?>
                @endforeach
                
            </div>
            @if (count($images)>1)
                
            <a class="carousel-control-prev" href="#carouselExampleIndicators{{$count}}" role="button" data-slide="next">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators{{$count}}" role="button" data-slide="prev">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            @endif
        </div>


    </div>
</div>
@endif
<?php $count++ ?>
@endforeach

@endsection