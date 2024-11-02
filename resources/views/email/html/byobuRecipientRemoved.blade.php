<x-mail::html.notification>
    <x-slot:body>
        {!! $translator->trans('fof-byobu.email.body.recipient_removed', [
    '{recipient_display_name}' => $user->display_name,
    '{actor_display_name}' => $blueprint->user->display_name,
    '{discussion_title}' => $blueprint->discussion->title,
    '{discussion_url}' => $url->to('forum')->route('discussion', ['id' => $blueprint->discussion->id]),
]) !!}
    </x-slot:body>
</x-mail::html.notification>
