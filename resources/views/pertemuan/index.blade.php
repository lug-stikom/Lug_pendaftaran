@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sms Gateway</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('pertemuan.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('materi') ? ' has-error' : '' }}">
                            <label for="materi" class="col-md-4 control-label">Materi</label>

                            <div class="col-md-6">
                                <input id="materi" type="text" class="form-control" name="materi" value="{{ old('materi') }}">

                                @if ($errors->has('materi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('materi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi Acara</label>

                            <div class="col-md-6">
                                <!-- <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}"> -->

                                <textarea rows="4" cols="50" id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>


                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('diadakan') ? ' has-error' : '' }}">
                            <label for="diadakan" class="col-md-4 control-label">Diadakan</label>

                            <div class="col-md-6">
                                <input id="diadakan" type="date" class="form-control" name="diadakan" value="{{ old('diadakan') }}">

                                @if ($errors->has('diadakan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diadakan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ruang') ? ' has-error' : '' }}">
                            <label for="ruang" class="col-md-4 control-label">Ruang</label>

                            <div class="col-md-6">
                                <input id="ruang" type="text" class="form-control" name="ruang">

                                @if ($errors->has('ruang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ruang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pengurus_id') ? ' has-error' : '' }}">
                            <label for="pengurus_id" class="col-md-4 control-label">Pengurus ID</label>

                            <div class="col-md-6">
                                <input id="pengurus_id" type="text" class="form-control" name="pengurus_id">

                                @if ($errors->has('pengurus_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengurus_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div style="background-color:white;border-radius:10px">
                          <table class ="table table-condensed table-hover" style="margin-top:40px;" >
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Nim </th>
                                  <th>Nama </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i =1; ?>
                                @foreach ($members as $member)
                                  <tr>
                                    <td><?php echo $i++;?></td>
                                    <td>{{$member->Nim}}</td>
                                    <td>
                                      <a href="{{route('member.show',$member->id)}}">
                                        {{$member->Nama}}
                                      </a>
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
