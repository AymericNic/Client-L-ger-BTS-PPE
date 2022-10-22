<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EspacePrivé</title>
</head>
<body>
    <?php
    $id = mysqli_connect("127.0.0.1:8889","root", "root","Roille");
    mysqli_query($id,"SET NAMES 'utf8'");
    echo "Bonjour [$loginC] !";
    ?>
    <div class="row">						
	<div class="col-md-12">
		<ul class="list-group fa-padding">
			<?php
			if(isset($_GET['userid']) && !empty($_GET['userid'])) {
				$ticket->userId = $_GET['userid'];
			}
			
			if(isset($_GET['status']) && !empty($_GET['status'])) {
				$ticket->status = $_GET['status'];
			}	

			if(isset($_GET['order']) && !empty($_GET['order'])) {
				$ticket->order = $_GET['order'];
			}	
			
			$ticketResult = $ticket->getTicket();
			while ($ticketDetails = $ticketResult->fetch_assoc()) {
				$ticket->id = $ticketDetails["id"];
			?>
			<li class="list-group-item">
				<div class="media">
					<i class="fa fa-code pull-left"></i>
					<div class="media-body">
						<a href="ticket.php?ticket_id=<?php echo $ticketDetails["id"]; ?>"><strong><?php echo $ticketDetails['title']; ?></strong> <span class="number pull-right"># <?php echo $ticketDetails['id']; ?> </span></a>
						<p class="info">Opened by <a href="#"><?php echo $ticketDetails['name']; ?></a> <?php echo $ticket->timeElapsedString($ticketDetails['created']); ?> <i class="fa fa-comments"></i> <a href="#"><?php echo $ticket->getReplyCount(); ?> Reply</a></p>
					</div>
				</div>
			</li>
			<?php
			}
			?>								
		</ul>
	</div>
    </div>

</body>
</html>