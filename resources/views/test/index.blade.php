Hola codigo Nelson

<!--yo-->

<!--
<?php // echo $prueba->title ?>
<?php //	dd($prueba); ?>			-->
<!--dese router ver: http://localhost:8090/laravel/c1/public/articles/view/3   -->
	
<!--no se ve bien poner codigo php por eso BALDE entrega una solucion-->
<br>
{{ $prueba->title }}.
<br>
@for($i = 0; $i <= 5; $i++)
	<br>
	{{ $i }}
@endfor

@for ($i = 0; $i < 10; $i++)
  <br>
  The current value is {{ $i }}
@endfor
<br>

@if(1==1)
	{{ "Es igual a 1" }}
@endif
<br>
