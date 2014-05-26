window.onload = function () {
  var s = Snap("#svg"),
  	  bigCircle = s.circle(105, 105, 100),
  	  smallCircle = s.circle(48,92,37);

  bigCircle.attr({
    fill:"#999",
    stroke:"#000",
    strokeWidth:3
  });

  smallCircle.attr({
  	fill:"#FFF",
  	stroke:"#333",
  	strokeWidth:3
  });

 
  var discs = s.group(smallCircle, s.circle(163, 92, 37));

  discs.attr({
  	fill:"#FFF",
  	stroke:"#333",
  	strokeWidth:3
  });

  // bigCircle.attr({
  // 	mask:discs
  // });
	bigCircle.animate({r:60},1000);
	smallCircle.animate({r: 19}, 2000);
	discs.select("circle:nth-child(2)").animate({r: 19}, 2000);
}


