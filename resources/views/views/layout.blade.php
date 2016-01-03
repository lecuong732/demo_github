@extends('views.master')
@section('title','Layout template')
@section('sidebar')
    @parent
    LAYOUT PHÍA SAU
@stop
@section('noidung')
    Đây Là Trang layout
    <br>
    <?php $hoten = '<b>Lê Văn Cường</b>';?>
    <?php echo $hoten;?> {{--cách viết thông thường--}}
    <br>
    {{$hoten}} {{--cách viết trong blade--}}{{--dùng khi import vào database--}}
    <br>
    {!! $hoten !!} {{--hoặc viết theo cái này--}}{{--dùng cho các đoạn văn bản thường--}}
    <br>
    <?php $diem = 7?>
    <?php
        if($diem > 7)
            echo 'Học sinh trung bình';
        elseif($diem = 7)
            echo 'Học sinh khá';
        else
            echo 'Học sinh giỏi';
    ?> {{--cách viết thông thường--}}
    <br>
    @if($diem < 7)
        HỌC SINH TRUNG BÌNH
    @elseif($diem > 7)
        HỌC SINH GIỎI
    @else
        HỌC SINH KHÁ
        <br>
        ĐƯỢC PHẦN THƯỞNG
    @endif {{--cách viết trong blade--}}
    <br>
    {{isset($diem) ? $diem : 'Không tồn tại biến điểm'}} {{--cách viết trong blade--}}
    <br>
    {{$diemm or 'KHÔNG TỒN TẠI BIẾN DIỂMM'}} {{--cách viết khác--}}
    <br>
    <?php echo csrf_field(); ?> {{--tạo ra 1 trường ẩn trong laravel--}}
    <br>
    @for($i = 0; $i < 10; $i ++ )
        Vòng lặp for: {!! $i !!} <br>
    @endfor
    <?php $j = 0?>
    @while($j < 10)
        Vòng lăp while: {!! $j !!}
        <br>
        <?php $j ++?>
    @endwhile
    <?php
        $array = array('cơm', 'chao', 'phở', 'bún');
    ?>
    @foreach($array as $value)
        Vòng lặp foreach: {{$value}} <br>
    @endforeach
@stop