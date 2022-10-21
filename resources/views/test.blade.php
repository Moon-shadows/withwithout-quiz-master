
<section>
    <div class="blob">


        <svg viewBox="0 0 200 200">
            <defs>
            <!-- Our gradient fill #gradient -->
            <linearGradient id="gradient" gradientTransform="rotate(90)">
                <!-- Use CSS custom properties for the start / stop colors of the gradient -->
                <stop id="gradientStop1" offset="0%" stop-color="var(--startColor)" />
                <stop id="gradientStop2 " offset="100%" stop-color="var(--stopColor)" />
            </linearGradient>
            </defs>
            <path d="M-97.3443 36.9294C-70.5786 4.35944 -37.4777 -4.26202 
            3.06685 1.80493C24.2894 4.99807 46.3039 10.5861 61.9832 
            25.4341C76.5539 39.1646 83.5225 59.1217 93.9754 
            76.2049C106.646 97.2796 124.859 114.842 136.104 136.715C171.105 
            204.729 150.516 311.06 110.922 372.368C102.845 384.981 93.0251 
            397.115 80.1966 404.778C52.3222 421.383 17.3208 414.198 -14.513 
            407.971C-49.5144 401.266 -85.1493 395.997 -120.784 393.922C-149.292 
            392.325 -173.365 385.779 -188.411 358.318C-200.923 335.647 -202.19 
            308.505 -200.29 282.641C-194.113 196.905 -154.835 116.279 -104.63 
            46.3491C-102.254 43.156 -99.8784 39.9629 -97.3443 36.9294Z"
            fill="url('#7678ED')"></path>
        </svg>
    </div>
</section>

CSS:
:root {
    --startColor: hsl(0, 100%, 75%);
    --stopColor: hsl(0, 100%, 75%);
  }
  
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    /* align our svg to the center of the viewport both horizontally and vertically */
    height: 100vh;
    display: grid;
    place-items: center;
  }
  
  svg {
    /* a perfectly square <svg> element that will never overflow the viewport */
    width: 90vmin;
    height: 90vmin;
  }

  path {
    cursor: pointer;
  }
  


  Javascript:
  // (our <path> element)
    const path = document.querySelector('path');
    // (used to set our custom property values)
    const root = document.documentElement;

    function createPoints() {
        const points = [];
        // how many points do we need
        const numPoints = 6;
        // used to equally space each point around the circle
        const angleStep = (Math.PI * 2) / numPoints;
        // the radius of the circle
        const rad = 75;
      
        for (let i = 1; i <= numPoints; i++) {
          // x & y coordinates of the current point

          const theta = i * angleStep;
      
          const x = 100 + Math.cos(theta) * rad;

          const y = 100 + Math.sin(theta) * rad;
      
          // store the point's position
          points.push({
            x: x,
            y: y,
            /* we need to keep a reference to the point's original {x, y} coordinates 
            for when we modulate the values later */
            originX: x,
            originY: y,
            // more on this in a moment!
            noiseOffsetX: Math.random() * 1000,
            noiseOffsetY: Math.random() * 1000,
          });
        }
      
        return points;
      }


      We can then initialise our blob points like so:
      
      const points = createPoints();


      (function animate() {
        requestAnimationFrame(animate);
      })();

      (function animate() {
        // generate a smooth continuous curve based on points, using Bezier curves. spline() will return an SVG path-data string. The arguments are (points, tension, close). Play with tension and check out the effect!
        path.setAttribute('d', spline(points, 1, true));
      
        requestAnimationFrame(animate);
      })();



      function map(n, start1, end1, start2, end2) {
        return ((n - start1) / (end1 - start1)) * (end2 - start2) + start2;
      }



    const simplex = new SimplexNoise();

// how fast we progress through "time"
let noiseStep = 0.005;

function noise(x, y) {
  // return a value at {x point in time} {y point in time}
  return simplex.noise2D(x, y);
}


(function animate() {
    ...
    // for every point...
    for (let i = 0; i < points.length; i++) {
      const point = points[i];
  
      // return a pseudo random value between -1 / 1 based on this point's current x, y positions in "time"
      const nX = noise(point.noiseOffsetX, point.noiseOffsetX);
      const nY = noise(point.noiseOffsetY, point.noiseOffsetY);
      // map this noise value to a new value, somewhere between it's original location -20 and it's original location + 20
      const x = map(nX, -1, 1, point.originX - 20, point.originX + 20);
      const y = map(nY, -1, 1, point.originY - 20, point.originY + 20);
  
      // update the point's current coordinates
      point.x = x;
      point.y = y;
  
      // progress the point's x, y values through "time"
      point.noiseOffsetX += noiseStep;
      point.noiseOffsetY += noiseStep;
    }
  })();



  let hueNoiseOffset = 0;

  (function animate() {
    ...
    // we want the hue to move a little slower than the rest of the shape
    hueNoiseOffset += noiseStep / 6;
  })();


  (function animate() {
    ...
    const hueNoise = noise(hueNoiseOffset, hueNoiseOffset);
    const hue = map(hueNoise, -1, 1, 0, 360);
  
    root.style.setProperty("--startColor", `hsl(${hue}, 100%, 75%)`);
    root.style.setProperty("--stopColor", `hsl(${hue + 60}, 100%, 75%)`);
    document.body.style.background = `hsl(${hue + 60}, 75%, 5%)`;
  })();




//Bonus when hover over the blob!!
  document.querySelector('path').addEventListener('mouseover', () => {
    noiseStep = 0.01;
  });
  
  document.querySelector('path').addEventListener('mouseleave', () => {
    noiseStep = 0.005;
  });

  