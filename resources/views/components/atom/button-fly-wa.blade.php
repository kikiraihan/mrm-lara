<a {!! $attributes->merge([
    'class'=>'fixed bottom-12 right-4 bg-green-500 hover:bg-green-600 text-white py-2 px-3 rounded-full shadow flex items-center gap-2 text-3xl z-10',
    'target'=>"_blank"
]) !!} >
    <i class="fab fa-whatsapp" ></i>
    <span class="text-lg">{{$slot}}</span>
</a>