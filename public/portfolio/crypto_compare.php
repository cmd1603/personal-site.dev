<?php

function pageController() {
	$data = [];
	// page title
	$data["title"] = "Crypto Compare";
	// to toggle active class on navbar
	$data["projects"] = "active";
	$data["about"] = "";
	$data["resume"] = "";
	$data["contact"] = "";

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php require_once "../header.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CryptoCompare</title>
        <link rel="stylesheet" href="/css/style.css">
  </head>
	<body class="container">
		<?php require_once "../navbar.php" ?>
		<h1 style="padding-top: 50px">Top 20 Crypto Currencies</h1>
		<div class="row">
<!-- 			<div class="jumbotron col-xs-offset-2 col-xs-8">
		        <p>
		          This website indexes the top 10 cryptocurrencies by market cap (how
		          much the sum of all coins is collectively worth), and gives you an easy
		          way to compare cryptocurrency performance and rank over the last week.
		        </p>				
			</div> -->
		</div>
		<div id="app">
			<table class="table table-hover">
				<thead>
					<td>Rank</td>
					<td>Name</td>
					<td>Symbol</td>
					<td>Price (USD)</td>
					<td>1H</td>
					<td>1D</td>
					<td>1W</td>
					<td>Market Cap (USD)</td>		
			    </thead> 
			    <tbody>
					<tr v-for="coin in coins">
						<td>{{ coin.rank }}</td>
						<td><img v-bind:src="getCoinImage(coin.symbol)"> {{ coin.name }}</td>
						<td>{{ coin.symbol }}</td>
						<td>{{ coin.price_usd | currency }}</td>
						<td v-bind:style="getColor(coin.percent_change_1h)">
							<span v-if="coin.percent_change_1h > 0">+</span>{{ coin.percent_change_1h }}%
						</td>
						<td v-bind:style="getColor(coin.percent_change_24h)">
							<span v-if="coin.percent_change_24h > 0">+</span>{{ coin.percent_change_24h }}%
						</td>
						<td v-bind:style="getColor(coin.percent_change_7d)">
							<span v-if="coin.percent_change_7d > 0">+</span>{{ coin.percent_change_7d }}%
						</td>
						<td>{{ coin.market_cap_usd | currency }}</td>						
					</tr>			    	
			    </tbody> 			

				
			</table>	
		</div>
		<script src="/js/vue.js"></script>
        <script src="/js/vue2-filter.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/js/app.js"></script>
	</body>
</html>