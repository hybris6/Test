<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Thomas testsida</title>
	<style>
		html, body {
                background-color: #0ff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
				text-align: center;
                margin: 0;
				padding: 0;
            }
		#container {
            background-color:#0fffff;
            text-align:center;
            height:auto;
            width:80%;
            min-width:800px;
            position:relative;
            top:0%;
            margin:auto;
        }
        
        #toplogo {
            height:60px;
            width:100%;
            position:relative;
        }
        
        #topmenu {
            display:inline-block;
            line-height:20px;
            background-color:#f7941e; /*#0070bf;*/
            height:20px;
            width:100%;
            position:relative;
            /*float:left;*/ 
            margin-top:0px;
            margin-left:0px;
            overflow:hidden;
            text-align: left;
        }
        
            .topmenu_item {
                display: inline-block;
                background-color:#f7941e; /*#0070bf;*/
                position:relative;
                margin-top:0px;
                margin-left:0px;
                text-align: center;
            }
            
            .topmenu_item:hover {
                background-color:#818285;
            }
            
            .topmenu_item:active {
                background-color:#818285;
            }
            /*
            .topmenu_item:focus {
                background-color:#818285;
            }
            
            .topmenu_item:target {
                background-color:#818285;
            }
            */
    
        #pagecontent {
            background-color:#f00fff;
            height:auto;
            min-height:75%;
            width:100%;
            position:relative;
            /*float:left;*/
            margin-top:3px;
            margin-left:0px;
            overflow:hidden;
        }
    
        #footer {
            background-color:#818285;
            height: auto;
            min-height: 20px;
            width: 100%;
            text-align: left;
            position: relative;
            /*float:left;*/
            margin-left:0px;
            margin-top:1px;
            margin-bottom:0px;
        }
    
            
        
    
                h1 {
                    font-family: arial, helvetica, sans-serif;
                    color: #818285;
                    font-size:60px;
                    text-align: left;
                    letter-spacing: -3px;
                    padding:0px;
                    margin-top:0px;
                    margin-bottom:0px;
                    
                }
    
                h2 {
                    font-family: arial, helvetica, sans-serif;
                    color: #818285;
                    font-size:15px;
                    /*text-align: center;*/
                    letter-spacing: -1px;
                    border-bottom-style: solid;
                    border-bottom-width: 1px;
                    margin-top:0px;
                    margin-bottom:0px;
                }
    
                
    
                .clear {    
                    clear: both;
                }
    
                .clearleft {
                    clear: left;
                }
                
                .inline {
                    display: inline-block; 
                    /*border: 1px solid red; */ 
                    margin:0px;
                }
    
                td {
                    background:black
                    border: 1px solid black;
                }
    
                p {
                    color:black; font-size:12pt; text-align:justify;
                    font-family:arial,sans-serif
                }
                
                tm {
                    color:#ffffff; font-size:10pt; text-align:justify;
                    font-family:arial,sans-serif
                }
    
                p.foot {
                    color:white; font-size:9pt; text-align:center;
                    font-family:arial,sans-serif; font-weight:bold
                }
    
                a:link,a:visited,a:active {
                    color:white
                }
		
	</style>
</head>

<body>
<div id="container">
	<div id="toplogo">
	</div>        
	<div id="topmenu">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Products</a>
						
                    @else
			<a href="{{ url('/test') }} ">Test</a>
			<a href="{{ url('/result') }}">search</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
	</div>
	<div id="pagecontent">Test1 <br> Test2 <br> Test4
	</div>
	<div id="footer">
	</div>
</div>
</body>
