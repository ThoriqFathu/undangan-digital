<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ data_get($payload, 'cover.groom_name') }}
        &
        {{ data_get($payload, 'cover.bride_name') }}
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
    
</head>
<body
    x-data="{ opened: false }"
    class="overflow-x-hidden" style="background-color:#f1eff0;"
>
   

    @include('themes.premium-classic.partials.cover')

   
     <img
        src="{{ asset('storage/images/burung.gif') }}"
        class="burung-bg"
        
    >
    {{-- MAIN CONTENT --}}
    <main
        id="main-content"
        x-cloak
        x-show="opened"
        x-transition.opacity.duration.1000ms
        class="relative isolate overflow-hidden bg-[#f1eff0]"
    >

        {{-- =========================
            1. BRIDE & GROOM SECTION
        ========================== --}}
        @include('themes.premium-classic.partials.bride-groom')

        <section>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, nihil? Cumque eaque dolorem natus impedit neque possimus accusamus, deleniti ab, quo unde repudiandae consectetur doloremque quos voluptatibus illum hic! Veritatis!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis dolor sit dolores hic, deleniti ratione repellendus enim autem laudantium blanditiis asperiores officia beatae unde dicta sequi aspernatur veniam harum fugit?
            Dignissimos impedit, aspernatur sunt minima sed maiores nihil fugit molestias possimus natus distinctio soluta magnam, odit ex assumenda? Accusamus molestiae aliquid nostrum facere excepturi ab a vero sint doloribus quam.
            Pariatur velit fuga laborum molestias magni facere adipisci neque ullam, vitae fugiat odit itaque iure suscipit sapiente deserunt consectetur consequatur labore id aspernatur vero saepe laboriosam? Dolorem hic libero adipisci!
            Fugiat provident non nesciunt omnis? Aperiam corrupti eveniet iure reiciendis neque doloremque voluptatibus facere minus quam mollitia eligendi error esse voluptatum similique soluta explicabo, ipsam nesciunt nam corporis non vitae.
            Ea ipsam aliquid quam illum? Eaque, minima debitis praesentium perferendis tenetur similique vel reiciendis natus quam rerum exercitationem atque neque, fugiat sint ullam. Laudantium, ipsam et dolore blanditiis vero repellat?
            Asperiores similique repudiandae architecto minus, aspernatur expedita quis provident nemo nulla maiores eos ratione accusamus dignissimos repellendus sequi quia quae quibusdam esse neque! Nam asperiores dolorem voluptatem optio. Eveniet, nulla?
            Dolorum quaerat iure corrupti minima, autem temporibus animi non assumenda ratione laudantium ut similique aut, incidunt, inventore voluptatibus sapiente laborum molestias dignissimos? Similique distinctio nihil amet voluptatum laudantium velit a.
            Iste ipsum quia nobis doloremque voluptatibus at, reprehenderit, blanditiis cum, molestiae non quidem nulla exercitationem provident sed. Quis, saepe placeat rerum necessitatibus dolores a maxime, sapiente commodi facere, obcaecati consequatur.
            Totam nobis, voluptate at dolore maiores deleniti nihil enim. Corporis ipsum, neque eligendi quis, illum quas quos voluptatibus repellendus esse voluptas sit sint rerum error odio, repudiandae ipsa beatae ut!
            Reprehenderit, vero quae. Optio fuga corrupti inventore enim alias quisquam consequatur repellat totam minima dignissimos sit doloremque ipsam ad esse tenetur, doloribus voluptate aliquid veritatis vitae exercitationem reprehenderit cumque cupiditate!
            Beatae debitis non ipsam quas doloribus omnis, hic praesentium iste, deserunt quisquam maiores suscipit deleniti odio exercitationem ab doloremque enim nisi architecto! Obcaecati placeat veritatis eum, doloremque nihil ex distinctio.
            Dolore beatae, quos explicabo aut iure nam possimus eum unde nesciunt esse? Accusamus amet deserunt commodi aliquid omnis porro impedit ea. Delectus dolorem, nihil incidunt laboriosam sequi quisquam architecto nam?
            Quod cumque praesentium dolorum, animi suscipit modi voluptas corporis totam deserunt odio debitis, qui magnam? Dolorum quas nesciunt debitis eligendi dignissimos? Molestias neque, perferendis incidunt doloribus recusandae enim numquam unde.
            Asperiores veniam accusantium soluta hic perspiciatis minus minima facilis eius earum distinctio autem iure esse, dolorum eum enim mollitia, voluptatem nihil repellat quibusdam nulla est libero labore atque fugit? Amet.
            Sed quae, adipisci hic, porro saepe quibusdam perferendis dicta unde voluptatibus quam necessitatibus non nostrum tenetur autem cum! Autem eligendi veniam ullam, vero unde sit quidem. Facere enim quas iusto?
            Possimus, magnam ex. Omnis quisquam, laborum dignissimos assumenda sint fuga? Nam animi sequi reprehenderit obcaecati facere explicabo odit, culpa sint voluptates nisi ipsum rerum, recusandae incidunt! Iste officia illum aperiam!
            Itaque consectetur dicta exercitationem voluptates ea accusantium dolores doloribus blanditiis, similique explicabo unde consequatur rem obcaecati quia atque eveniet repellendus ullam velit labore, beatae tempore ipsum neque sint? Mollitia, vitae!
            Sunt esse laborum dolorem harum repellendus alias, laboriosam a aperiam molestias ipsa, minima sint eius dolores cupiditate nostrum odio illo at temporibus incidunt ullam voluptate. Dolorum nemo iusto ducimus odit!
            Corrupti aut ad iste necessitatibus quos officiis voluptatibus iure quam perferendis, ducimus mollitia modi pariatur temporibus veritatis consequuntur voluptatum tempore quo repellat, soluta nesciunt aspernatur impedit molestiae amet. Cum, nam!
            Amet soluta, ratione fugit voluptatum eius est sunt quia voluptates dicta veniam laborum alias laudantium consectetur culpa illum mollitia cumque atque quasi vel iste porro voluptatem facere. Odit, molestiae vitae!</p>
        </section>


        

    @include('themes.premium-classic.scripts.countdown')

   
    
</body>
</html>