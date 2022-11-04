<html>
    <head>
        <style>
            .slide {
                position: relative;
                box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                margin-top: 26px;
            }
            

            .slide-inner {
                position: relative;
                overflow: hidden;
                width: 100%;
                height: calc( 300px + 25em);
            }

            .slide-open:checked + .slide-item {
                position: static;
                opacity: 100;
                
            }

            .slide-item {
                position: absolute;
                opacity: 0;
                -webkit-transition: opacity 0.3s ease-out;
                transition: opacity 0.3s ease-out;
            }

            .slide-item img {
                display: block;
                height: auto;
                max-width: 100%;
            }

            .slide-control {
                background: rgba(0, 0, 0, 0.28);
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                display: none;
                display: "200ms";
                font-size: 40px;
                height: 40px;
                line-height: 35px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(0, -50%);
                cursor: pointer;
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
                width: 40px;
                z-index: 10;
            }

            .slide-control.prev {
                left: 2%;
            }

            .slide-control.next {
                right: 2%;
            }

            .slide-control:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #aaaaaa;
            }

            #slide-1:checked ~ .control-1,
            #slide-2:checked ~ .control-2,
            #slide-3:checked ~ .control-3 {
                display: block;
            }

            .slide-indicador {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }

            .slide-indicador li {
                display: inline-block;
                margin: 0 5px;
            }

            .slide-circulo {
                color: #828282;
                cursor: pointer;
                display: block;
                font-size: 35px;
            }

            .slide-circulo:hover {
                color: #aaaaaa;
            }

            #slide-1:checked ~ .control-1 ~ .slide-indicador 
                 li:nth-child(1) .slide-circulo,
            #slide-2:checked ~ .control-2 ~ .slide-indicador 
                  li:nth-child(2) .slide-circulo,
            #slide-3:checked ~ .control-3 ~ .slide-indicador 
                  li:nth-child(3) .slide-circulo {
                color: #428bca;
            }

            #titulo {
                width: 100%;
                position: absolute;
                padding: 0px;
                margin: 0px auto;
                text-align: center;
                font-size: 27px;
                color: rgba(255, 255, 255, 1);
                font-family: 'Open Sans', sans-serif;
                z-index: 9999;
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
                     -1px 0px 2px rgba(255, 255, 255, 0);
            }
        </style>
    </head>
    <body>
        <div>
            <h1>
                ARMAS UTILIZADAS POR EL ARTE NINJA 
            </h1>
        </div>
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                      name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="https://ramenparados.com/wp-content/uploads/2022/03/naruto-shippuden-replica-kunai-800x600.jpeg" width="10000" height="300">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="https://images.squarespace-cdn.com/content/v1/54dbbd7fe4b00b0b46a0c367/1649172650980-9EJVOQ2ZLPDX7XJU11JX/02+Katanas+Short.png?format=1000w"
                     width="10000" height="300">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/022/404/087/large/anikesh-awasthi-final1.jpg?1575319372" width="10000" height="300">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
            <div>
                <h2>
                    Entre las armas mas usadas por el arte ninjka se encuentran las armas como el Kunai, la Kusaarigama y la Katana 
                </h2>
            </div>
        </div>
    </body>
</html>