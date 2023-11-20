@foreach ($locais as $local)

    <div class="card swiper-slide">
        <div class="image-content">
            <span class="overlay"></span>
                <a href="{{ route('local.show', ['id' => $local->id]) }}" class="card-image">
                    <img src="{{ url("storage/imagens/{$local->imagem}") }}" alt="{{ $local->nome }}" class="card-img">
                </a>
        </div>

        <div class="card-content">
            <h2 class="name">{{$local->nome}}</h2>
                <p class="description">{{$local->descricao}}</p>

                    @if(auth()->check())
                        @php
                            $curtidaExistente = \App\Models\Curtida::where('local_id', $local->id)
                                ->where('user_id', auth()->id())
                                ->first();
                        @endphp

                        @if($curtidaExistente)
                            <form method="POST" action="{{ route('remover.curtida', ['id' => $curtidaExistente->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button" style="width: 105px">Remover</button>
                            </form>
                        @else
                            <form class="curtida-form" data-local-id="{{ $local->id }}" action="{{ route('cadastrar.curtida') }}" method="POST">
                                @csrf
                                <input type="hidden" name="local_id" value="{{ $local->id }}">
                                <button type="submit" class="button" id="cliquecurtida">Curtir</button>
                            </form>
                        @endif
                    @endif
        </div>
    </div>

@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>

    $(document).ready(function () {
    $('#cliquecurtida').click(function (e) {

        e.preventDefault();

        $.ajax({
            
            url: '{{ route('atualizar.locais') }}', type: 'GET', success: function (data) {
                console.log(data);
                $('#locais-container').html(data);

            },

            error: function (xhr, status, error) {
                console.error(error);
            }

            });
        });

    });

</script>