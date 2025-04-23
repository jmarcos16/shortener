import * as React from "react"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"

export default function ShortcutUrl() {
  return (
    <Card className="w-[850px]">
      <CardHeader>
        <CardTitle>Create your shortcut links</CardTitle>
        <CardDescription>Generate short, easy-to-share URLs in just a few clicks. Perfect for quick access and cleaner links.</CardDescription>
      </CardHeader>
      <CardContent>
        <form>
          <div className="grid w-full items-center gap-4">
            <div className="flex flex-col space-y-1.5">
              <Label htmlFor="link">Link</Label>
              <Input id="link" placeholder="https://example.com/your-link" />
            </div>
          </div>
        </form>
      </CardContent>
      <CardFooter className="flex justify-between">
        <Button>Shortcut</Button>
      </CardFooter>
    </Card>
  )
}
