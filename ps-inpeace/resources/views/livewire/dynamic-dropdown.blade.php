<div>
    <div class = "my-8 mx-4">
         <label for="estado" >Estado</label>
         <select wire:model="estado" id="estado" name="estado" class = "form-control">
             <option value="" selected>{{__('Selecione um estado...')}}</option>
             @foreach($estados as $estado)
                 <option value="{{$estado->sigla}}">{{$estado->nome}}</option>
             @endforeach
         </select>
    </div>

    <div class = "my-8 mx-4">
         <label for="cidade" >Cidade</label>
         <select name="cidade" id="cidade" class = "form-control">
             <option value="" selected>{{__('Selecione uma cidade...')}}</option>
             @if($this->estado)
                 @foreach($municipios as $municipio)
                     <option value="{{$municipio->nome}}">{{$municipio->nome}}</option>
                 @endforeach
             @endif

         </select>
    </div>

 </div>
