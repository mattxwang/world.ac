import Image
import ImageDraw
img = Image.new('RGB', (200, 100))
draw = ImageDraw.Draw(img)
draw.text((20, 20), 'Hello', fill=(255, 0, 0))
img.save("filename.png")