<div x-data>
    <button class="block px-4 py-3 text-right bg-blue-900 rounded-sm text-blue-50 text-md" @click="
                        token = $wire.createLinkToken({{ $user->id }});
                        token.then(function(response){
                            console.log('link token: ' + response);
                            handler = Plaid.create({
                                token: response,
                                onSuccess: (public_token, metadata) => $wire.onSuccess(public_token, metadata),
                                onLoad: () => {},
                                onExit: (err, metadata) => $wire.onExit(err, metadata),
                                onEvent: (eventName, metadata) => {},
                                receivedRedirectUri: null,
                            });
                            handler.open();
                        });
                ">Link an Item</button>
</div>