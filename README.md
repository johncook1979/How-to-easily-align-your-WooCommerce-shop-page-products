# How to easily align your WooCommerce shop page products
Get a perfect alignment on your shop and archive pages when you are unable to get the products lining up correctly. 

### Go from this
![alt text](/assets/shop%20unaligned.webp)

### To this
![alt text](https://github.com/johncook1979/How-to-easily-align-your-WooCommerce-shop-page-products/blob/ad522def9d13f3bd99804e40f322b3612f6eb1d0/assets/shop%20aligned.webp)

Original concept from my blog here https://learnwp.swiftdesigns.com.au/how-to-easily-align-your-woocommerce-shop-page-products/ where CSS has been used to apply hard rules. JavaScript allows for dynamic sizing and an overall easier implementation for product image sizing.

The images in this example will be square in shape. To apply the height so the images are rectangle add the required maths as shown in the code examples. You may need to regenerate your thumbnails for clearer images

One of the main causes of images not lining up correctly is a main product image has been uploaded with a dimension that is below the image dimensions configured in your WooCommerce shop settings. If you have image dimensions of 300px X 300px and upload an image 400px X 150px, it will cause the image to appear smaller than others on the page. Simarly, if you upload an image that is 150px wide and 400px high it will appear significantly larger than other product images, causing the shop page to look disorganised. If you are in a position where you can't upload properly sized images, this snippet will solve the problems for you. Just make sure to add the css rules to your theme

