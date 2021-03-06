    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_abierta_sector_productivo" class="control-label">* Sector productivo</label>
            <select style="width:100%;" id="innovacion_abierta_sector_productivo" name="innovacion_sector_productivo[]"
                    class="form-control select2"
                    data-ajax--url="{{route('api.tipo-sector.select2','1')}}"
                    data-ajax--data-type="json"
                    data-ajax--data-cache="true"
                    data-allow-clear="true"
                    data-placeholder="Seleccione uno o varios sectores"
                    data-close-on-select="false"
                    required="required" multiple>
                @if($convocatoria->consectores && $convocatoria->tipoconvocatoria_id=='1')
                    @foreach($convocatoria->consectores as $sector)
                        <option value="{{$sector->sector_id}}"
                            selected>{{$sector->sectorid->nombre}}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_abierta_subsector_productivo" class="control-label">* Subsector productivo</label>
            <select style="width:100%;" id="innovacion_abierta_subsector_productivo" name="innovacion_subsector_productivo[]"
                    class="form-control select2"
                    data-placeholder="Seleccione uno o varios subsectores"
                    required="required" multiple>

            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_abierta_ods" class="control-label">* Objetivo de Desarrollo Sostenible (ODS)</label>
            <select style="width:100%;" id="innovacion_abierta_ods" name="innovacion_ods[]"
                    class="form-control select2"
                    data-ajax--url="{{route('api.objetivo-desarrollo.select2')}}"
                    data-ajax--data-type="json"
                    data-placeholder="Seleccione uno o varios ODS"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    required="required" multiple>
                    @if($convocatoria->conods && $convocatoria->tipoconvocatoria_id=='1')
                        @foreach($convocatoria->conods as $objetivo)
                            <option value="{{$objetivo->ods_id}}"
                                selected>{{$objetivo->objetivoid->nombre}}</option>
                        @endforeach
                    @endif
            </select>
        </div>
    </div>
