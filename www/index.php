
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p>
  SBSA is an R package that offers a simplified interface to Bayesian
  sensitivity analysis. It allows a formal but natural approach to
  investigation of the nature of poorly measured and unobserved
  confounders in collected data.
</p>

<p>
  Consider a study investigating the association between an outcome
  and a set of exposure variables. Some of the variables are
  confounders, sometimes poorly measured. Other potential confounders
  may have gone unmeasured. Therefore, simply using regression on this
  data brings a while range of potential problems.
</p>

<p>
  <a href="http://en.wikipedia.org/wiki/Sensitivity_analysis">Sensitivity
  analysis</a> can be used to asses how these limitations in available
  data impact inference. In practice, however, sensitivity analysis
  can be challenging to perform, or to interpret
  results. <em>Simplified Bayesian sensitivity analysis</em>, proposed
  by Gustafson <em>et al.</em><a href="#Gustafson2009">[1]</a>, aims to
  find a blance between realism and simplicity in conducting
  sensitivity analysis. It provides a model of data that requires the
  user to provide only a few hyperparameters, and a computational
  method to effectively apply MCMC to estimate the model.
</p>

<p>
  This project implements Simplified Bayesian sensitivity analysis for
  both continuous and binary variables, as described by
  Gustafson <em>et al.</em>. The package can be installed
  from <a href="http://cran.r-project.org/web/packages/SBSA/index.html">CRAN</a>.
  To view the source repository and other project details, please
  visit the <a href="http://<?php echo $domain; ?>/projects/<?php echo
  $group_name; ?>/">project summary page</a> on R-Forge.
</p>


<h2>References</h2>
<ol>
<li><a name="Gustafson2009"/> Gustafson, P., McCandless, L.C., Levy,
A.R., and Richardson, S. (2010). "Simplified Bayesian sensitivity
analysis for mismeasured and unobserved confounders." Biometrics 66,
1129-1137.
(DOI: <a href="http://dx.doi.org/10.1111/j.1541-0420.2009.01377.x">10.1111/j.1541-0420.2009.01377.x</a>)
</li>
</ol>

</body>
</html>
