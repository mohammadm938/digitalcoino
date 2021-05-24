<?php
	include "scrapper/html_dom.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>قیمت لایو ارز دیجیتال | دیجیتالکوینو</title>
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
									<?php include 'include/header.php'; ?>
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">نام</th>
								<th class="column2">قیمت</th>
								<th class="column3">سود یا ضرر</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/ethereum","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/ethereum","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/ethereum","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/stellar","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/stellar","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/stellar","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/xrp","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/xrp","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/xrp","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/chainlink","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/chainlink","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/chainlink","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/cardano","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/cardano","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/cardano","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/litecoin","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/litecoin","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/litecoin","span[class='percent-value-text']");?></td>
							</tr>
							<tr>
								<td class="column1"><?php echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin-cash","div[class='coin-title'] h2[class='heading']"); ?></td>
								<td class="column2"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin-cash","div[class='price-large']");?></td>
								<td class="column3"><?php  echo scraping_arzdigital("https://www.coindesk.com/price/bitcoin-cash","span[class='percent-value-text']");?></td>
							</tr>
						</tbody>
					</table>
 				</div>
			</div>
		</div>
 	</div>
					<?php include 'include/Footer-with-logo.php';?>
</body>
</html>
