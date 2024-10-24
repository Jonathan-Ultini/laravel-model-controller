<!-- CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `original_title` varchar(100) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `vote` float(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; -->



<div class="movie-container">
  @foreach ($movies as $movie)
  <div class="movie-card">
    <h2>{{ $movie->title }}</h2>
    <p>Nationality: {{ $movie->nationality }}</p>
    <p>Release Date: {{ $movie->date }}</p>
  </div>
  @endforeach
</div>