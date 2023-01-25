<div {{$attributes->merge(["class" => "pt-petition-content p-8 bg-secondary text-primary border-2 border-white"])}}>
    <div class="pt-petition-form-step1">
        <h2 class="text-4xl font-bold mb-4">Unterschreibe unseren Brief an Silvia Steiner!</h2>
        <p class="text-white">Fordere mit uns Silvia Steiner dazu auf, ihr Stipendiendebakel aufzuräumen! Sie und ihre Bildungsdirektion sind dafür verantwortlich, dass unzählige junge Erwachsene in den finanziellen Ruin getrieben werden. <b class="text-white">Das können wir nicht mehr länger akzeptieren!</b></p>
        <p class="text-xl mt-2"><b class="text-primary">Bereits {{$count}} Personen haben unseren Brief unterzeichnet!</b></p>
        <form action="/sign" method="POST" class="pt-petition-form flex flex-wrap mt-8">
            <div class="pt-input-group">
                <label for="lname" class="pt-label">Vorname</label>
                <input type="text" name="fname" id="fname" class="pt-input" required>
            </div>
            <div class="pt-input-group">
                <label for="lname" class="pt-label">Nachname</label>
                <input type="text" name="lname" id="lname" class="pt-input" required>
            </div>
            <div class="pt-input-group !w-full">
                <label for="email" class="pt-label">E-Mail</label>
                <input type="email" name="email" id="email" class="pt-input" required>
            </div>
            <div class="pt-input-group !w-full">
                <label for="school" class="pt-label">Bildungseinrichtung</label>
                <input type="text" name="school" id="school" class="pt-input" placeholder="(optional)">
            </div>
            <button type="submit" class="pt-button w-full">Unterschreiben</button>
            @csrf
        </form>
    </div>
    <div class="pt-thanks-screen hidden">
        <h2 class="text-4xl font-bold mb-2">Vielen Dank für deine Unterschrift!</h2>
        <p class="text-white">Zusammen können wir es schaffen, dass die Bildungsdirektion endlich das angerichtete Desaster aufräumt! <b class="text-white">Bleib dran, wir werden dich auf dem Laufenden halten!</b></p>
        <div class="pt-share-buttons flex flex-wrap gap-4 mt-4" data-share-url="{{url()->current()}}"
            data-share-text="{{
                urlencode("Hallo 👋
Ich habe gerade einen Brief unterzeichnet, in dem ich Silvia Steiner dazu auffordere, ihr Stipendiendebakel aufzuräumen. Sie und ihre Bildungsdirektion sind schuld daran, dass unzählige junge Erwachsene in den finanziellen Ruin getrieben werden. Das darf nicht länger sein!
Unterzeichnest du auch?");
            }}"
            data-share-tweet="{{
                urlencode("Ich fordere @silviasteiner dazu auf, ihr Stipendiendebakel endlich aufzuräumen, denn sie ist schuld daran, dass viele junge Erwachsene in den finanziellen Ruin getrieben werden. Das darf nicht sein!
Unterzeichnest du auch?
#Stipendiendebakel");
            }}"
        >
            <a class="!text-lg pt-button pt-share" data-share-type="whatsapp">Auf WhatsApp teilen</a>
            <a class="!text-lg pt-button pt-share" data-share-type="telegram">Auf Telegram teilen</a>
            <a class="!text-lg pt-button pt-share" data-share-type="facebook">Auf Facebook teilen</a>
            <a class="!text-lg pt-button pt-share" data-share-type="twitter">Auf Twitter teilen</a>
        </div>
    </div>
</div>
