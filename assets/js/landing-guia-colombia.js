/**
 * Guía turística embebida en index (#landing-guia-destinos).
 * window.__landingGuia.init() al cargar; refresh() al pulsar Buscar en el hero.
 */
(function () {
    var IMG_FALLBACK = "./assets/images/w.jpg";

    var DESTINOS = {
        cartagena: {
            match: ["cartagena", "ctg", "cartágena"],
            region: "Caribe · Bolívar",
            title: "Cartagena",
            headline: "Murallas, brisa caribeña y sabor colonial",
            intro: "La Perla del Caribe combina patrimonio UNESCO con islas cercanas para un viaje entre historia y playa.",
            when: "Diciembre a abril suele ser más seco; el Caribe es cálido todo el año.",
            food: "Pescado frito en Getsemaní, posta negra cartagenera, mote de queso, cocadas.",
            image: "https://images.unsplash.com/photo-1589197338866-a503d2045b3a?w=1200&q=80",
            tips: [
                "Atardecer caminando la muralla y cafés en el Centro",
                "Castillo de San Felipe y fuertes panorámicos",
                "Día en playas de Barú o Islas del Rosario (salidas desde Muelle de la Bodeguita)",
                "Getsemaní por la noche: música, arte urbano y ambiente local"
            ]
        },
        santamarta: {
            match: ["santa marta", "simon bolivar", "smr", "tayrona"],
            region: "Magdalena · Caribe",
            title: "Santa Marta & Tayrona",
            headline: "Sierra, selva y mar en un mismo viaje",
            intro: "Ciudad más antigua de Colombia y puerta al Parque Tayrona, Minca y trekking exigente a la Ciudad Perdida.",
            when: "Diciembre–marzo bastante seco; verificar oleaje en playas del parque.",
            food: "Cayeye, patacón, pescado frito en Taganga, jugos tropicales.",
            image: "https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=1200&q=80",
            tips: [
                "Entrada temprano al Tayrona para aprovechar senderos",
                "Minca: fincas cafeteras, cascadas Marinka y Pozo Azul",
                "Rodadero o Playa Blanca para día relajado más cerca",
                "Ciudad Perdida: expedición de varios días; reserva con operadores autorizados"
            ]
        },
        medellin: {
            match: ["medellín", "medellin", "jose maria cordova", "cordova", "mde", "olaya herrera", "eoh"],
            region: "Antioquia",
            title: "Medellín",
            headline: "Ciudad innovadora rodeada de montaña",
            intro: "Metro, metro cable, arte urbano y excursiones a pueblos y el Peñol en poco más de una hora.",
            when: "Clima templado casi todo el año; picos de lluvia en abril–mayo y octubre.",
            food: "Bandeja paisa (porción para compartir), sancocho, arepas, café de finca.",
            image: "https://images.unsplash.com/photo-1596422849487-27b0f0a4c5c5?w=1200&q=80",
            tips: [
                "Comuna 13: grafitis, escalas eléctricas y miradores",
                "Guatapé y la Piedra del Peñol: panorámica de embalse",
                "Metrocable hacia Parque Arví (naturaleza y artesanías)",
                "Pueblos del Oriente: El Retiro, Rionegro, paradas gastronómicas"
            ]
        },
        bogota: {
            match: ["bogotá", "bogota", "bog", "el dorado"],
            region: "Cundinamarca",
            title: "Bogotá",
            headline: "Cultura, altiplano y escena gastronómica",
            intro: "Museos de primer nivel, barrios con historia y cercanía a Zipaquirá o Villa de Leyva si alargas el viaje.",
            when: "Seco enero–marzo y julio–agosto; llevar algo abrigador por las noches.",
            food: "Ajiaco, chocolate santafereño con almojábana, lechona, criptomercados y alta cocina en Chapinero/Zona G.",
            image: "https://images.unsplash.com/photo-1568632234013-0d4e5829eac2?w=1200&q=80",
            tips: [
                "Museo del Oro y Candelaria caminando",
                "Monserrate: teleférico o funicular con vista 360°",
                "Zona Rosa / Zona G para cena; mercados para probar locales",
                "Día fuera: Zipaquirá (catedral de sal) o Guatavita (letras del dorado)"
            ]
        },
        cali: {
            match: ["cali", "clo", "alfonso bonilla"],
            region: "Valle del Cauca",
            title: "Cali",
            headline: "Ritmo, río y sabores del Pacífico",
            intro: "Capital mundial de la salsa, con barrios coloniales y acceso a naturaleza cerca.",
            when: "Junio–agosto y diciembre–marzo suelen tener mejor clima; muy cálido a mediodía.",
            food: "Cholado, lulada, pandebono, empanadas vallecaucanas, churrasco; escena de restaurante en Granada.",
            image: "https://images.unsplash.com/photo-1545167625-76a3a637a508?w=1200&q=80",
            tips: [
                "San Antonio y Cristo Rey al atardecer",
                "Juanchito o locales de salsa en vivo",
                "Pance o río para día de naturaleza cercana",
                "Día al Pacífico (Buenaventura / playas) o haciendas cafeteras al sur"
            ]
        },
        eje: {
            match: ["salento", "pereira", "armenia", "eje", "cafetero", "axm", "pei", "matecaña", "el edén"],
            region: "Quindío / Risaralda",
            title: "Eje cafetero",
            headline: "Café, palmas de cera y pueblos coloridos",
            intro: "Valle de Cocora, fincas con recorrido sensorial y termales entre montañas suaves.",
            when: "Diciembre–febrero y junio–agosto relativamente secos; mañanas frescas siempre.",
            food: "Trucha, bandeja paisa y café de origen, arequipe, dulces de panela.",
            image: "https://images.unsplash.com/photo-1589817210099-4a7b2c3e99c0?w=1200&q=80",
            tips: [
                "Valle de Cocora al amanecer: niebla y palmas altísimas",
                "Tour en finca cafetera (trilladora, molienda, catación)",
                "Termales de Santa Rosa de Cabal al anochecer",
                "Filandia o Salento: arquitectura, miradores y artesanías"
            ]
        },
        sanandres: {
            match: ["san andrés", "san andres", "adz", "gustavo rojas pinilla"],
            region: "Archipiélago",
            title: "San Andrés",
            headline: "Mar de siete colores",
            intro: "Snorkel, paseo en moto o golf car, y islotes cercanos (Johnny Cay, Haynes).",
            when: "Diciembre–abril menos lluvioso; viento puede afectar al mar.",
            food: "Rondón, pescado frito, coco y mariscos en puestos del centro.",
            image: "https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=1200&q=80",
            tips: [
                "La Piscinita y acuario para snorkel suave",
                "Johnny Cay: día corto; llevar protección solar y efectivo",
                "Circuito en moto respetando señales y playas",
                "Providencia (si logras cupo aéreo) para arena más virgen"
            ]
        },
        barranquilla: {
            match: ["barranquilla", "baq", "ernesto cortissoz"],
            region: "Atlántico",
            title: "Barranquilla",
            headline: "Energía caribeña y gran Carnaval",
            intro: "Puerta del Caribe con museos modernos y buena base para costa y río Magdalena.",
            when: "Febrero (Carnaval) o temporada seca similar a Cartagena.",
            food: "Arroz de lisa, butifarra, sopa de mariscos, patacones rellenos.",
            image: "https://images.unsplash.com/photo-1634633740062-d1b739e0e7e3?w=1200&q=80",
            tips: [
                "Ventana al mundo y Museo del Caribe",
                "Salida a Salgar o Puerto Colombia",
                "Calle de la sombrilla / ambientes nocturnos en Simón Bolívar",
                "Día en Tubará o combinación con Santa Marta (≈2 h)"
            ]
        },
        bucaramanga: {
            match: ["bucaramanga", "bga", "palo negro"],
            region: "Santander",
            title: "Bucaramanga",
            headline: "Ciudad de los parques y clima agradable",
            intro: "Parque del Chicamocha (Panachi), pueblos de Santander y clima de primavera.",
            when: "Todo el año templado; lluvias breves en abril y octubre.",
            food: "Hormiga culona (dulce), pepitoria, mute santandereano, cabrito.",
            image: "https://images.unsplash.com/photo-1519677100203-a0e668c92439?w=1200&q=80",
            tips: [
                "Cañón del Chicamocha: teleférico y miradores",
                "Barichara y Guane en día (pueblos patrimonio)",
                "Girón colonial cerca de la ciudad",
                "Parapente en ruta local (operadores certificados)"
            ]
        },
        cucuta: {
            match: ["cúcuta", "cucuta", "camilo daza", "cuc"],
            region: "Norte de Santander",
            title: "Cúcuta y Pamplona",
            headline: "Andes fronterizos y cultura santandereana",
            intro: "Ciudad fronteriza con historia; hacia Pamplona y rutas andinas.",
            when: "Clima cálido en Cúcuta; subir altitud refresca en pueblos.",
            food: "Mamona, arepas santandereanas, obleas, costillas al carbón.",
            image: "https://images.unsplash.com/photo-1454496520488-0174bded0ebc?w=1200&q=80",
            tips: [
                "Pamplona: arquitectura colonial y clima frío",
                "Parque Santander en Cúcuta y zona comercial",
                "Excursión hacia Chinácota o patrimonio cercano",
                "Combinar con Bucaramanga en ruta extendida"
            ]
        }
    };

    var GENERIC_LEAD_HTML = "Inspiración para tu viaje: qué hacer, cuándo ir y qué probar. Usa el buscador arriba y pulsa <strong style=\"color:var(--accent-strong)\">Buscar</strong> para ver ideas según tu destino.";

    function escapeHtml(s) {
        if (!s) return "";
        var d = document.createElement("div");
        d.textContent = s;
        return d.innerHTML;
    }

    function setBackgroundWithFallback(el, url) {
        if (!el) return;
        el.style.backgroundImage = "url('" + url + "')";
        var probe = new Image();
        probe.onload = function () { el.dataset.bgOk = "1"; };
        probe.onerror = function () {
            el.style.backgroundImage = "url('" + IMG_FALLBACK + "')";
        };
        probe.src = url;
    }

    function norm(s) {
        s = (s || "").toLowerCase();
        try {
            s = s.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        } catch (e) { /* ignore */ }
        return s;
    }

    function resolveKey(destinoStr, origenStr) {
        function tryOne(str) {
            if (!str) return null;
            var winner = null;
            var winLen = 0;
            Object.keys(DESTINOS).forEach(function (id) {
                DESTINOS[id].match.forEach(function (k) {
                    var km = norm(k);
                    if (str.indexOf(km) !== -1 && km.length > winLen) {
                        winner = id;
                        winLen = km.length;
                    }
                });
            });
            return winner;
        }
        var dest = norm(destinoStr);
        var orig = norm(origenStr);
        return tryOne(dest) || tryOne(orig) || tryOne(dest + " " + orig);
    }

    function renderFeature(key) {
        var d = DESTINOS[key];
        if (!d) return;
        var section = document.getElementById("dc-feature");
        var media = document.getElementById("dc-feature-media");
        if (!section || !media) return;
        document.getElementById("dc-feature-region").textContent = d.region;
        document.getElementById("dc-feature-title-h").textContent = d.title;
        document.getElementById("dc-feature-intro").textContent = d.intro;
        document.getElementById("dc-feature-when").textContent = d.when;
        document.getElementById("dc-feature-food").textContent = d.food;
        var list = document.getElementById("dc-feature-list");
        list.innerHTML = d.tips.map(function (t) { return "<li>" + escapeHtml(t) + "</li>"; }).join("");
        setBackgroundWithFallback(media, d.image);
        section.classList.add("is-active");
        document.getElementById("dc-hero-title").textContent = "Tu viaje a " + d.title;
        document.getElementById("dc-hero-lead").textContent = d.headline + " — aquí tienes un plan para inspirarte.";
        setBackgroundWithFallback(document.getElementById("dc-hero-bg"), d.image);
    }

    function clearFeature() {
        var section = document.getElementById("dc-feature");
        if (section) section.classList.remove("is-active");
        var t = document.getElementById("dc-hero-title");
        if (t) t.textContent = "Colombia te espera";
        var lead = document.getElementById("dc-hero-lead");
        if (lead) lead.innerHTML = GENERIC_LEAD_HTML;
        var bg = document.getElementById("dc-hero-bg");
        if (bg) setBackgroundWithFallback(bg, IMG_FALLBACK);
    }

    function renderGrid(highlightKey) {
        var grid = document.getElementById("dc-grid");
        var moreTitle = document.getElementById("dc-more-destinations");
        if (!grid) return;
        grid.innerHTML = "";
        var order = Object.keys(DESTINOS);
        if (highlightKey) {
            if (moreTitle) {
                moreTitle.innerHTML = 'Otros destinos <span>que podrían interesarte</span>';
            }
            order = order.filter(function (id) { return id !== highlightKey; });
        } else if (moreTitle) {
            moreTitle.innerHTML = 'Más ideas <span>por ciudad</span>';
        }
        order.forEach(function (id) {
            var d = DESTINOS[id];
            var art = document.createElement("article");
            art.className = "dc-card";
            art.id = "dest-" + id;
            art.innerHTML =
                '<div class="dc-card__media"></div>' +
                '<div class="dc-card__body">' +
                '<span class="dc-tag">' + escapeHtml(d.region.split("·")[0].trim()) + '</span>' +
                "<h2>" + escapeHtml(d.title) + "</h2>" +
                "<p>" + escapeHtml(d.intro) + "</p>" +
                "<ul>" + d.tips.slice(0, 3).map(function (t) { return "<li>" + escapeHtml(t) + "</li>"; }).join("") + "</ul>" +
                "</div>";
            setBackgroundWithFallback(art.querySelector(".dc-card__media"), d.image);
            grid.appendChild(art);
        });
    }

    function buildChips(origen, destino, fechas, pasajeros) {
        var wrap = document.getElementById("dc-trip-chips");
        if (!wrap) return;
        wrap.innerHTML = "";
        function add(label, val) {
            if (!val) return;
            var span = document.createElement("span");
            span.className = "dc-chip";
            span.innerHTML = "<strong style=\"color:var(--accent-strong)\">" + escapeHtml(label) + "</strong> · " + escapeHtml(val);
            wrap.appendChild(span);
        }
        add("Origen", origen);
        add("Destino", destino);
        add("Fechas", fechas);
        add("Pasajeros", pasajeros);
    }

    function init() {
        if (!document.getElementById("landing-guia-destinos")) return;
        clearFeature();
        buildChips("", "", "", "");
        renderGrid(null);
        var bg = document.getElementById("dc-hero-bg");
        if (bg && !bg.style.backgroundImage) setBackgroundWithFallback(bg, IMG_FALLBACK);
    }

    function refresh(origen, destino, fechas, pasajeros) {
        if (!document.getElementById("landing-guia-destinos")) return;
        buildChips(origen || "", destino || "", fechas || "", pasajeros || "");
        var key = resolveKey(destino, origen);
        if (key) renderFeature(key);
        else clearFeature();
        renderGrid(key);
    }

    window.__landingGuia = { init: init, refresh: refresh, resolveKey: resolveKey };
})();
