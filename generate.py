def gridGenerator(n):
	with open("PixelPage.html", "w+") as f:
		f.write("<!DOCTYPE html>\n")
		f.write("<html>\n")
		f.write("<head>\n")
		f.write("\t<title>pDraw</title>\n")
		f.write("\t<link rel = \"stylesheet\" href = \"PixelPage.css\">\n")
		f.write("\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>\n")
		f.write("\t<script src=\"PixelPage.js\"></script>\n")
		f.write("</head>\n")
		f.write("<body>\n")
		f.write("\t<div class = \"grid\">\n")
		f.write("\t<ul class = row>\n")
		count = 0
		for i in range(n +1):
			if i != 0:
				f.write("\t<ul> \n")
			for i in range(n + 1):
				f.write("\t<li class = \"block" "id = " + str(count) + "\"> </li>\n")
				count += 1
			f.write("\t</ul>\n")
		f.write("\t</div>\n")
		f.write("\t<input type=\"color\" id=\"selectedColour\" value=\"#0000\">\n")
		f.write("</body>\n")
		f.write("</html>")
gridGenerator(input())