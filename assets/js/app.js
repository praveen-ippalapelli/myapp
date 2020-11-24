html = { "title" : "HTML", "known" : "8", "bg_color" : "#e44d26", "color" : "white" };
css = { "title" : "CSS", "known" : "7", "bg_color" : "#264de4", "color" : "white" };
javascript = { "title" : "Javascript", "known" : "7", "bg_color" : "#f7e018", "color" : "black" };
bootstrap = { "title" : "Bootstrap", "known" : "7", "bg_color" : "#533b78", "color" : "white" };
jquery = { "title" : "Jquery", "known" : "6", "bg_color" : "#0865a6", "color" : "#f2f2f2" };
mysql = { "title" : "MySql", "known" : "3", "bg_color" : "#00718b", "color" : "#ea8c10" };
reactjs = { "title" : "React", "known" : "5", "bg_color" : "#222222", "color" : "#61dafb" };
nodejs = { "title" : "Node.js", "known" : "3", "bg_color" : "#313131", "color" : "#64b648" };
json = { "title" : "JSON", "known" : "6", "bg_color" : "#2f2f2f", "color" : "white" };
php = { "title" : "PHP", "known" : "4", "bg_color" : "#777bb3", "color" : "black" };
mongodb = { "title" : "MongoDB", "known" : "3", "bg_color" : "#11924f", "color" : "white" };
expressjs = { "title" : "Express.js", "known" : "3", "bg_color" : "#eee", "color" : "black" };
kitsune = { "title" : "Kitsune Framework", "known" : "7", "bg_color" : "#f06428", "color" : "white" };
redux = { "title" : "Redux", "known" : "5", "bg_color" : "#764abc", "color" : "white" };



var skill_array = [javascript, reactjs, nodejs, mongodb, mysql, expressjs, kitsune, php, redux, html, css, bootstrap, jquery, json];
	var gt_10 = '';
	for(i=0; i<skill_array.length; i++){
		if (i>10) {
			gt_10 = 'gt-10'
		}
		$('.skills-list').append(
		`
		<div class="skill ${gt_10}">
			<div class="level-bar" style="background:${skill_array[i].bg_color};width:${skill_array[i].known}0%;"></div>
			<div class="skill-name" style="color:${skill_array[i].color};">${skill_array[i].title}</div>
		</div>
		`
		);
	}

