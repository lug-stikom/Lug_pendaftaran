@extends('master')

@section('content')
<div class="container">
<div class="body">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-6">
          <h1>Daftar Member

          <small>Total :{{$total_member}}</small>


          </h1>
          <div style="background-color:white;border-radius:10px">
          <table class ="table table-condensed table-hover" style="margin-top:40px;" >
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nim </th>
                  <th>Nama </th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1; ?>
                @foreach ($members as $member)
                  <tr>
                    <td><?php echo ($i++ +($members->currentPage()*$members->perPage())-$members->perPage());?></td>
                    <td>{{$member->Nim}}</td>
                    <td>
                      <a href="{{route('Member.show',$member->id)}}">
                        {{$member->Nama}}
                      </a>
                    </td>

                    <td>

                    <form method="POST" action="{{route('Member.destroy',$member->id)}}" style="display: inline;">
                    {{method_field('DELETE')}}
                    {!! csrf_field() !!}
                      <botton type="submit" class="btn btn-danger btn-sm delete-confirm">
                        <span class="glyphicon glyphicon-trash"></span>Hapus
                      </button>
                    </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
            <div class="pull-right">{!! $members->links() !!}</div>

        </div><!--/.sidebar-offcanvas-->
        <div class="col-md-6">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
            <h1 style="margin-bottom: 40px;">Input Data Member</h1>
            <form method="POST" action="{{route('Member.store')}}" class="form-horizontal">

              {!! csrf_field() !!}
              <div class="form-group {{ $errors->has('Nim') ? 'has-error' : ''}}">
                <label class="col-md-1 control-label" for="Nim">Nim</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="Nim" name="Nim" value="{{old ('Nim')}}">

                    <?php
                    echo $errors->first('Nim','<span class="help-block">:message</span>');
                    ?>

                  </div>
                </div>
              <div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
                <label class="col-md-1 control-label" for="Nama">Nama</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="Nama" name="Nama" value="{{old ('Nama')}}">

                    <?php
                    echo $errors->first('Nama','<span class="help-block">:message</span>');
                    ?>

                  </div>
                </div>
              <div class="form-group {{ $errors->has('Tlp') ? 'has-error' : ''}}">
                <label class="col-md-1 control-label" for="Tlp">Tlp</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="Tlp" name="Tlp" value="{{old ('Tlp')}}">

                    <?php
                    echo $errors->first('Tlp','<span class="help-block">:message</span>');
                    ?>

                  </div>
                </div>
                <!-- <div class="form-group {{ $errors->has('Pic') ? 'has-error' : ''}}">
                  <label class="col-md-1 control-label" for="Pic">Picture</label>
                    <div class="col-md-3">



                      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                          <input type="text" name="myname" id="myname">
                      </form>

                      <script type="text/javascript" src="{{ asset('js/webcam.js')}}"></script>
                      <script language="JavaScript">
                      		document.write( webcam.get_html(320, 240) );
                      </script>
                      <form>
                      		<input type=button value="Configure..." onClick="webcam.configure()">
                      		&nbsp;&nbsp;
                      		<input type=button value="Take Snapshot" onClick="take_snapshot()">
                      	</form>

                      <script language="JavaScript">
                      		document.write( webcam.get_html(320, 240) );
                      </script> -->

                      <!-- <script language="JavaScript">
                          webcam.set_api_url( 'Member.test' );
                      		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
                      		webcam.set_shutter_sound( true ); // play shutter click sound
                      		webcam.set_hook( 'onComplete', 'my_completion_handler' );

                      		function take_snapshot(){
                      			// take snapshot and upload to server
                      			document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
                      			webcam.snap();
                      		}

                      		function my_completion_handler(msg) {
                      			// extract URL out of PHP output
                      			if (msg.match(/(http\:\/\/\S+)/)) {
                      				// show JPEG image in page
                      				document.getElementById('upload_results').innerHTML ='<h1>Upload Successful!</h1>';
                      				// reset camera for another shot
                      				webcam.reset();
                      			}
                      			else {alert("PHP Error: " + msg);
                      		}
                      	</script> -->


                    <!-- </div>
                  </div> -->

              <div class="form-group">
                <div class="col-md-offset-1 col-md-6">
                  <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span>
                    Tambah Baru
                  </button>
                  <button href="" type="reset" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>Batal

                  </button>
                </div>
              </div>
            </form>

        </div><!--/.col-xs-12.col-sm-9-->


      </div><!--/row-->


      <footer>
        <p>&copy; 2016 LUG STIKOM</p>
      </footer>
    </div>
    </div><!--/.container-->

@endsection
