@extends("front.app")
@section("content")
@section("title","FAQ")
@php
$num=0;
@endphp
<div style="justify-items: center;">
    <div class="accordion" id="accordionExample" style="margin-top: 9%; width:75%;">
        @foreach($list as $data)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $num }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $num }}" aria-expanded="true" aria-controls="collapse{{ $num }}">
                    {{ $data->title }}
                </button>
            </h2>
            <div id="collapse{{ $num }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $num }}"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <li>{{ $data->content }}</li>
                </div>
            </div>
        </div>
        @php
        $num++;
        @endphp
        @endforeach
        <!--<div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q2.未成年子女中獎該準備哪些證件?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <li>請直系親屬提供『個人身份證影本』及『戶口名簿影本』並依活動辦法辦理。</li>
                </div>
            </div>
        </div>-->
    </div>
</div>
@endsection