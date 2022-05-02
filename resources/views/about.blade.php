@extends('layouts.page')

@section('page_title', 'About Us')

@section('page_content')
    <div class="container py-5">
        <div>
            <div class="float-start me-5 mb-3">
                <img src="{{ url('images/about_image.jpg') }}" style="max-width: 256px;" class="img-fluid" alt="">
            </div>
            <div>
                <p>
                    <strong>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                    </strong>
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a commodo orci. Fusce suscipit condimentum lacus, vitae luctus ipsum pretium sed. Cras sed dapibus purus, at gravida nibh. Nullam ac tempus est, non pellentesque diam. Sed dignissim ultrices pellentesque. Duis laoreet malesuada arcu, sit amet congue sapien mollis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent dignissim diam quis augue suscipit, ut tincidunt magna imperdiet.
                </p>
                <p>
                    Morbi venenatis magna sem, a lobortis lorem lacinia ac. Pellentesque ut tortor at metus cursus consequat. Proin pretium a velit eget imperdiet. Nulla sit amet viverra elit, nec tincidunt enim. Suspendisse iaculis nec lacus vel ultricies. Aliquam vitae cursus lacus, id tincidunt erat. Nulla sit amet consequat sem, ut maximus nunc. Vestibulum volutpat gravida sem, id ultricies leo maximus ac. Vivamus placerat dui vitae eros efficitur, quis condimentum sem congue.
                </p>
                <p>

                    Vivamus venenatis velit ut tortor condimentum scelerisque. Nunc at pharetra dui. Sed porttitor odio et imperdiet venenatis. Cras a dui nec purus laoreet pulvinar convallis ac nunc. Nunc lobortis egestas nunc vel egestas. Maecenas a magna gravida leo congue consequat. Praesent eu dolor quam. Donec efficitur eget nisi quis gravida.
                </p>
                <p>

                    Ut ultrices, orci at pretium finibus, felis ex venenatis augue, a euismod nulla felis sed diam. Quisque id malesuada ligula. Aliquam eget ligula euismod, volutpat eros a, fermentum nulla. Sed ac tincidunt ex, ut commodo tortor. Vestibulum vehicula sem nec nibh volutpat, quis tincidunt eros posuere. Suspendisse quis metus eu lorem posuere pellentesque sit amet at nulla. Aliquam non augue viverra, eleifend est at, molestie metus. Fusce quis libero eleifend, efficitur eros nec, gravida lacus. Nulla aliquam leo vel diam consequat interdum. Pellentesque at turpis quis arcu ullamcorper fermentum. Aliquam tempus nulla a ligula iaculis, vitae tristique lectus accumsan. Integer vitae elit auctor odio sagittis facilisis. Duis interdum nisl nec feugiat eleifend. Phasellus suscipit libero lectus, ullamcorper lobortis libero condimentum quis.
                </p>
            </div>
        </div>
    </div>

    @include('components.testimonials')
@endsection