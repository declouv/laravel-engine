<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Badge;
use App\Models\Board;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KanbanController extends Controller
{
    public function index(Badge $badge, Board $board, Item $item)
    {
        $badges = $badge->all();
        $board = $board->all();
        $items = $item->all();
        // Fetch the board data
        $boards = Board::with(['items.assigned', 'items.members'])->get();

        // Convert data to JSON structure
        $jsonData = $boards->map(function ($board) {
            return [
                // 'id' => $board->id,
                'id' => "board-" . strtolower(str_replace(' ', '-', $board->title)),
                'ids' => $board->id,
                'title' => $board->title,
                'item' => $board->items->map(function ($item) {
                    return [
                        // 'id' => strtolower(str_replace([' ',',','.',"'"], '-', $item->title)),
                        'id' => $item->id,
                        'title' => $item->title,
                        'comments' => $item->comments,
                        'badge-text' => $item->badge->name,
                        'badge' => $item->badge->color,
                        'due-date' => $item->due_date,
                        'attachments' => $item->attachments,
                        // 'assigned' => $item->assigned->pluck('name')->toArray() ?? ['1.png'],
                        // 'members' => $item->members->pluck('name'),
                        // 'assigned' => $item->members->map(function ($member) {
                        //     return $member->account->img; // Assuming `account_id` is a field in the related account model
                        // }),
                        'assigned' => $item->members->isNotEmpty()
                            ? $item->members->map(function ($member) {
                                return $member->account->img; // Assuming `img` is a field in the related account model
                            })->toArray()
                            : ['1.png'],
                        'members' => $item->members->isNotEmpty()
                            ? $item->members->map(function ($member) {
                                return $member->account->name; // Assuming `img` is a field in the related account model
                            })->toArray()
                            : ['no member'],
                        // 'members' => $item->members->map(function ($member) {
                        //     return $member->account->name;
                        // }),
                    ];
                }),
            ];
        })->toArray(); // Convert the mapped collection to an array

        // Save JSON data to a file
        File::put(public_path('assets/json/kanban.json'), json_encode($jsonData, JSON_PRETTY_PRINT));

        // return response()->json(['message' => 'JSON file created successfully']);
        return view('kanban', compact('badges','boards','items'), ["title" => "Kanban"]);
    }

    public function boardStore(Request $request)
    {
        $input = $request->all();

        Board::create($input);

        return back();
    }
    public function itemStore(Request $request)
    {

        $input = $request->all();

        Item::create($input);

        return back();
    }
}
