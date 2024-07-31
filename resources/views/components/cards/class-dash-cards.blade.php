@props(['coaches', 'categories', 'classBenefits', 'classes', 'benefits','message'])
<div class="flex flex-wrap justify-center gap-10 mt-32">
    @foreach ($classes as $classe)
        <article class="card">
            <img class="card__background" src="{{ $classe->picture }}"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
                height="2193" />
            <div class="card__content | flow">
                <div class="card__content--container | flow">
                    <h2 class="card__title mb-5">{{ $classe->category->name }}</h2>
                    <strong class="text-xl text-white">{{ $classe->name }}</strong>
                    <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
                <div class="flex justify-around">
                    <button data-modal-target="authentication-modal-{{ $classe->id }}"
                        data-modal-toggle="authentication-modal-{{ $classe->id }}" type="button" class="editButton">
                        <span>Update</span>
                        <div class="top"></div>
                        <div class="left"></div>
                        <div class="bottom"></div>
                        <div class="right"></div>
                    </button>
                    <button data-modal-target="popup-modal-{{ $classe->id }}" data-modal-toggle="popup-modal-{{ $classe->id }}" type="button"
                        class="button">
                        <span>Delete</span>
                        <div class="top"></div>
                        <div class="left"></div>
                        <div class="bottom"></div>
                        <div class="right"></div>
                    </button>
                </div>
            </div>
        </article>
        <x-pop-ups.delete-class :classe="$classe" />
        <x-pop-ups.update-class :message="$message" :classe="$classe" :coaches="$coaches" :modalId="'authentication-modal-' . $classe->id" :categories="$categories"
            :benefits="$benefits" />
        
    @endforeach
</div>
