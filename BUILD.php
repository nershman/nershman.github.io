<?php
############################################################################################
# To "build" the site (just compile template and html files) and put things in proper places
# just run form bash `php [filename].php` and it will run the following script
############################################################################################


# This file will be used to build all non-blog stuff.
# So basically just a function to run index.php and save it to index.html
# And a function to rebuild all the permalink files using a template 
# (This would be done a lot differently if I had an actual server that ran php live,
# but I'm on github.io and using a build script is fine.)


# What this file *doesn't* take care of:
# * keep template header, blog template header, and site header all the same.

#TODO: dry run mode or something... save all files with _test appended i guess
#TODO: error checking before saving ? main problem is overwriting a good file with an error-filled file
#TODO: make it so I can just build the index.html from this file.
#TODO: make it so permalinks ar added to the ones on the portoflio, and not on the other one.

############# Functions ###############

	function buildPortfolio($outfile){
		ob_start();
		require('index.php');
		#$html = echo $file; #execute the php and php inside it, save result to var
		$data = ob_get_clean();
		file_put_contents($outfile, $data);
		ob_end_flush();
	}

	function buildPermas($contentfile, $templatefile, $folder, $filename){

		$pagecontents = file_get_contents($contentfile);
		$templatecontents = file_get_contents($templatefile);
		$result = str_replace('<!--PHP_INSERT_CONTENT_HERE-->', $pagecontents, $templatecontents);

		#remove folder from image references, since html will be IN the folder..
		$target = "src=\"" . $folder . "/";
		#echo ($target . ' '); #DEBUG
		$result = str_replace($target, "src=\"", $result);
		$target = "src=\'" . $folder . "/";
		$result = str_replace($target, "src=\'", $result);

		#same thing for links. sometimes i have a pdf in the folder
		$target = "href=\"" . $folder . "/";
		#echo ($target . ' '); #DEBUG
		$result = str_replace($target, "href=\"", $result);
		$target = "href=\'" . $folder . "/";
		$result = str_replace($target, "href=\'", $result);

		$fileout = $folder . "/" . $filename;
		fwrite(fopen($fileout, 'w'), $result);

	}


############### Script ################

	#DRY RUN
	#$output_file = 'index_test.html';
	$output_file = 'index.html';


	#populate projects in portfolio
	buildPortfolio($output_file); #note: re-arrange the projects form the index.php directly

	#generate permalinks for portfolio.
	$permpf = '_templates/permalink.html';
	buildPermas('_content/portf/imb.html',$permpf,'imb',$output_file);
	buildPermas('_content/portf/graph.html',$permpf,'graph',$output_file);
	buildPermas('_content/portf/sql.html',$permpf,'sql',$output_file);
	buildPermas('_content/portf/outlier.html',$permpf,'outlier',$output_file);
	buildPermas('_content/portf/pfizer.html',$permpf,'pfizer',$output_file);
	buildPermas('_content/portf/reddit.html',$permpf,'reddit',$output_file);
	buildPermas('_content/portf/simulation.html',$permpf,'simulation',$output_file);

?>
