<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h2>Adicionar</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('material.store')}}">
                @csrf
                <div class="row mb-3">
                    <label for="material" class="col-md-4 col-form-label text-md-end">Descricao</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="material" id="material">
                            <option selected>Descricao</option>
                            @foreach($materiais as $material)
                            <option value="{{$material->id}}">{{$material->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="quantidade" class="col-md-4 col-form-label text-md-end">Quantidade</label>
                    <div class="col-md-3">
                    <input id="valor" type="int" class="form-control" name="valor" value="{{ old('valor') }}" required>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>