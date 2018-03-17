                            <div>
                                {!! Form::label('profil','Profil :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    <textarea name="profil" class="btn btn-default btn-block" style="height: 200px; width: 290px" required=""></textarea>

                                    {!! $errors->first('profil','<p class="help-block">:message</p>') !!}
                                </div>



                            <br><br><br><br><br>

                            <br><br><br>
 
                             <div class="form-group{{ $errors->has('logo') ? 'has-error' : '' }}">
                                {!! Form::label('logo','Logo :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($komponen) && $komponen->logo)
                                <p>
                                    {!! Html::image(asset('img/'.$komponen->logo),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="logo" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('logo','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>



                            <br><br><br>



                            <div class="form-group{{ $errors->has('nama_kaprog') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('nama_kaprog','Nama Kaprog:',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    <input type="text" name="nama_kaprog" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('nama_kaprog','<p class="help-block">:message</p>') !!}
                                </div>


                            <br><br><br>


                               <div class="form-group{{ $errors->has('foto_kaprog') ? 'has-error' : '' }}">
                                {!! Form::label('foto_kaprog','Foto Kaprog :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($komponen) && $komponen->foto_kaprog)
                                <p>
                                    {!! Html::image(asset('img/'.$komponen->foto_kaprog),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="foto_kaprog" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('foto_kaprog','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>



                                  <div class="form-group{{ $errors->has('jabatan_kaprog') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('jabatan_kaprog','jabatan_kaprog :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    <input type="text" name="jabatan_kaprog" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('jabatan_kaprog','<p class="help-block">:message</p>') !!}
                                </div>



                            <br><br><br>



                                  <div class="form-group{{ $errors->has('target_kurikulum') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('target_kurikulum','target_kurikulum :',['class'=>'col-md-4 col-md-offset-2']) !!}
                            </div>
                                <div class="col-md-4">
                                    <textarea name="target_kurikulum" class="btn btn-default btn-block" style="height: 250px; width: 290px" required=""></textarea>

                                    </div>
                            
                            <div class="form-group" align="center">
                                <div class="col-md-5 col-md-offset-4">
                                <br>
                                <center>
                                {!! Form::submit('Simpan komponen', ['class'=>'btn btn-primary']) !!}
                                </center>
                                </div>
                            </div>