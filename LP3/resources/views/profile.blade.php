<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
    body{
        margin:0;
    padding:0;
    font-family:sans-serif;
        background-image: url(https://images.unsplash.com/photo-1488841887379-29a9388480e4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1077&q=80);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        
        }
.profile
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
/*    height: 321px;
    width: 265px;*/
margin-top: 2px;
padding:1px;
    display: inline-block;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 1px solid transparent;
    }

.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
.profile strong,span,div{
    text-transform: initial;
}


 </style>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="margin: 20%; margin-left:40%; width:100%">
	<div class="row">
    	 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 16px;">
                        <div class="well profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <figure>
                                     <img src="/images/{{$student['image']}}" alt="" class="img-circle" style="width:200px; height:200px;margin-top:10%" id="user-img">
                                </figure><br>
                                <h5 style="text-align:center;"><strong id="user-name">{{$student['fullname']}}</strong></h5>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <h5 style="text-align:center;"><strong>National ID</strong></h5>
                                <h5 style="text-align:center;" id="user-frid">{{$student['national_id']}}</h5>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <h5 style="text-align:center;"><strong>Email</strong></h5>
                                <h5 style="text-align:center;overflow-wrap: break-word;" id="user-email"> {{$student['email']}}</h5>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <h5 style="text-align:center;"><strong>Address</strong></h5>
                                <h5 style="text-align:center;" id="user-role">{{$student['address']}}</h5>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <h5 style="text-align:center;"><strong>Mobile</strong></h5>
                                <h5 style="text-align:center;overflow-wrap: break-word;" id="user-email"> {{$student['mobile']}}</h5>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <br>
                                <a href="/students"><button type="button" class="btn btn-warning" style="width:50%; margin-bottom:10%">Back</button>
                                   
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
	</div>
</div>