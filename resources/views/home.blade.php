@extends('layouts.master')

@section('title', 'Colegio Nacional De Ingenieros Constructores')

@section('content')
	@include('partials/slideshow')
	<div class="content">
		<div class="column">
			<div class="column-title">Noticias</div>
			<div class="column-body">
				<div class="news-article-box">
					<div class="article-title">Lorem Ipsumis</div>
					<div class="article-timestamp">Miércoles, 11 de noviembre de 2015, 19:32</div>
					<div class="article-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt placerat sapien vel tempor. Aenean ut nisi commodo, rhoncus purus quis, porta velit.</p>
						<div class="article-btn"><span>Leer más</span><i class="material-icons">arrow_forward</i></div>
					</div>
				</div>
				<div class="news-article-box">
					<div class="article-title">Lorem Ipsumus</div>
					<div class="article-timestamp">Viernes, 13 de noviembre de 2015, 08:21</div>
					<div class="article-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt placerat sapien vel tempor. Aenean ut nisi commodo, rhoncus purus quis, porta velit.</p>
						<div class="article-btn"><span>Leer más</span><i class="material-icons">arrow_forward</i></div>
					</div>
				</div>
				<div class="news-article-box">
					<div class="article-title">Lorem Ipsumus</div>
					<div class="article-timestamp">Viernes, 13 de noviembre de 2015, 08:21</div>
					<div class="article-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt placerat sapien vel tempor. Aenean ut nisi commodo, rhoncus purus quis, porta velit.</p>
						<div class="article-btn"><span>Leer más</span><i class="material-icons">arrow_forward</i></div>
					</div>
				</div>
				<div class="news-article-box">
					<div class="article-title">Lorem Ipsumus</div>
					<div class="article-timestamp">Viernes, 13 de noviembre de 2015, 08:21</div>
					<div class="article-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt placerat sapien vel tempor. Aenean ut nisi commodo, rhoncus purus quis, porta velit.</p>
						<div class="article-btn"><span>Leer más</span><i class="material-icons">arrow_forward</i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar-column">
		</div>
	</div>
@stop