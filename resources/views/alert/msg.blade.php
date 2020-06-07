				<body>
				@if($errors->any())
                    @foreach($errors->all() as $error)
                    <div id="mymessage" class="alert alert-danger">
                            <button  type="button" class="close" data-dismiss="alert">×</button>
                            <i class="halflings-icon info-sign"></i> 

                            <span><b>Danger -</b>{{$error}}</span>
                        </div>
                        @endforeach
                        @endif

                        

            </div><!-- /.row -->
				@if(session('successMsg'))
                    <div id="mymessage" class="alert alert-info">
                            <button  type="button" class="close" data-dismiss="alert">×</button>
                            <i class="halflings-icon info-sign"></i> 

                            <span><b></b>{{session('successMsg')}}</span>
                        </div>
                        @endif
						</body>


<script type="text/javascript">
    function runEffect() {
        setTimeout(function () {
            var selectedEffect = 'blind';
            var options = {};
            $("#mymessage").hide(selectedEffect, options, 500)
        }, 5000);
    }

</script>
