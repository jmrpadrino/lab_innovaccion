    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_sector_productivo" class="control-label">* Objetivo de Desarrollo Sostenible (ODS)</label>
            <select style="width:100%;" id="innovacion_sector_productivo" name="innovacion_ods[]"
                    class="form-control select2"
                    data-ajax--url="{{route('api.objetivo-desarrollo.select2')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    required="required" multiple>
                    @if($convocatoria->conods && $convocatoria->tipoconvocatoria_id=='2')
                        @foreach($convocatoria->conods as $objetivo)
                            <option value="{{$objetivo->ods_id}}"
                                selected>{{$objetivo->objetivoid->nombre}}</option>
                        @endforeach
                    @endif
            </select>
        </div>
    </div>
